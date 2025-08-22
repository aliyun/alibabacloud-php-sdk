<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetRegistryNamespaceResponseBody;

use AlibabaCloud\Dara\Model;

class namespace_ extends Model
{
    /**
     * @var string
     */
    public $acl;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $maintainer;

    /**
     * @var int
     */
    public $modules;

    /**
     * @var string
     */
    public $namespaceName;

    /**
     * @var int[]
     */
    public $sharedAccounts;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'acl' => 'acl',
        'createTime' => 'createTime',
        'description' => 'description',
        'maintainer' => 'maintainer',
        'modules' => 'modules',
        'namespaceName' => 'namespaceName',
        'sharedAccounts' => 'sharedAccounts',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->sharedAccounts)) {
            Model::validateArray($this->sharedAccounts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acl) {
            $res['acl'] = $this->acl;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->maintainer) {
            $res['maintainer'] = $this->maintainer;
        }

        if (null !== $this->modules) {
            $res['modules'] = $this->modules;
        }

        if (null !== $this->namespaceName) {
            $res['namespaceName'] = $this->namespaceName;
        }

        if (null !== $this->sharedAccounts) {
            if (\is_array($this->sharedAccounts)) {
                $res['sharedAccounts'] = [];
                $n1 = 0;
                foreach ($this->sharedAccounts as $item1) {
                    $res['sharedAccounts'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['acl'])) {
            $model->acl = $map['acl'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['maintainer'])) {
            $model->maintainer = $map['maintainer'];
        }

        if (isset($map['modules'])) {
            $model->modules = $map['modules'];
        }

        if (isset($map['namespaceName'])) {
            $model->namespaceName = $map['namespaceName'];
        }

        if (isset($map['sharedAccounts'])) {
            if (!empty($map['sharedAccounts'])) {
                $model->sharedAccounts = [];
                $n1 = 0;
                foreach ($map['sharedAccounts'] as $item1) {
                    $model->sharedAccounts[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
