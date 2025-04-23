<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDeployGraphResponseBody\result\graph;

use AlibabaCloud\Dara\Model;

class tableMetas extends Model
{
    /**
     * @var int
     */
    public $buildDeployId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $tableDeployId;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'buildDeployId' => 'buildDeployId',
        'domainName' => 'domainName',
        'name' => 'name',
        'tableDeployId' => 'tableDeployId',
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
        if (null !== $this->buildDeployId) {
            $res['buildDeployId'] = $this->buildDeployId;
        }

        if (null !== $this->domainName) {
            $res['domainName'] = $this->domainName;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->tableDeployId) {
            $res['tableDeployId'] = $this->tableDeployId;
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
        if (isset($map['buildDeployId'])) {
            $model->buildDeployId = $map['buildDeployId'];
        }

        if (isset($map['domainName'])) {
            $model->domainName = $map['domainName'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['tableDeployId'])) {
            $model->tableDeployId = $map['tableDeployId'];
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
