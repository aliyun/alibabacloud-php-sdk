<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDeployGraphResponseBody\result\graph;

use AlibabaCloud\Dara\Model;

class zoneMetas extends Model
{
    /**
     * @var string
     */
    public $domainInfo;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $suezAdminName;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'domainInfo' => 'domainInfo',
        'name' => 'name',
        'suezAdminName' => 'suezAdminName',
        'tag' => 'tag',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainInfo) {
            $res['domainInfo'] = $this->domainInfo;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->suezAdminName) {
            $res['suezAdminName'] = $this->suezAdminName;
        }

        if (null !== $this->tag) {
            $res['tag'] = $this->tag;
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
        if (isset($map['domainInfo'])) {
            $model->domainInfo = $map['domainInfo'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['suezAdminName'])) {
            $model->suezAdminName = $map['suezAdminName'];
        }

        if (isset($map['tag'])) {
            $model->tag = $map['tag'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
