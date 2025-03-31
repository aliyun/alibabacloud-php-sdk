<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\TlsCipherSuitesConfig;

use AlibabaCloud\Dara\Model;

class tlsCipherSuite extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $supportVersions;
    protected $_name = [
        'name' => 'name',
        'supportVersions' => 'supportVersions',
    ];

    public function validate()
    {
        if (\is_array($this->supportVersions)) {
            Model::validateArray($this->supportVersions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->supportVersions) {
            if (\is_array($this->supportVersions)) {
                $res['supportVersions'] = [];
                $n1 = 0;
                foreach ($this->supportVersions as $item1) {
                    $res['supportVersions'][$n1++] = $item1;
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['supportVersions'])) {
            if (!empty($map['supportVersions'])) {
                $model->supportVersions = [];
                $n1 = 0;
                foreach ($map['supportVersions'] as $item1) {
                    $model->supportVersions[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
