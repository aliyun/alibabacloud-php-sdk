<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListPluginRepositoriesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPluginRepositoriesResponseBody\data\repositories;

class data extends Model
{
    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $organizationName;

    /**
     * @var repositories[]
     */
    public $repositories;
    protected $_name = [
        'organizationId' => 'organizationId',
        'organizationName' => 'organizationName',
        'repositories' => 'repositories',
    ];

    public function validate()
    {
        if (\is_array($this->repositories)) {
            Model::validateArray($this->repositories);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }

        if (null !== $this->organizationName) {
            $res['organizationName'] = $this->organizationName;
        }

        if (null !== $this->repositories) {
            if (\is_array($this->repositories)) {
                $res['repositories'] = [];
                $n1 = 0;
                foreach ($this->repositories as $item1) {
                    $res['repositories'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        if (isset($map['organizationName'])) {
            $model->organizationName = $map['organizationName'];
        }

        if (isset($map['repositories'])) {
            if (!empty($map['repositories'])) {
                $model->repositories = [];
                $n1 = 0;
                foreach ($map['repositories'] as $item1) {
                    $model->repositories[$n1] = repositories::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
