<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDeployGraphResponseBody\result\graph;

use AlibabaCloud\Tea\Model;

class indexMetas extends Model
{
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
    public $tableName;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $zoneName;
    protected $_name = [
        'domainName'    => 'domainName',
        'name'          => 'name',
        'tableDeployId' => 'tableDeployId',
        'tableName'     => 'tableName',
        'tag'           => 'tag',
        'zoneName'      => 'zoneName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['domainName'] = $this->domainName;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->tableDeployId) {
            $res['tableDeployId'] = $this->tableDeployId;
        }
        if (null !== $this->tableName) {
            $res['tableName'] = $this->tableName;
        }
        if (null !== $this->tag) {
            $res['tag'] = $this->tag;
        }
        if (null !== $this->zoneName) {
            $res['zoneName'] = $this->zoneName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return indexMetas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['domainName'])) {
            $model->domainName = $map['domainName'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['tableDeployId'])) {
            $model->tableDeployId = $map['tableDeployId'];
        }
        if (isset($map['tableName'])) {
            $model->tableName = $map['tableName'];
        }
        if (isset($map['tag'])) {
            $model->tag = $map['tag'];
        }
        if (isset($map['zoneName'])) {
            $model->zoneName = $map['zoneName'];
        }

        return $model;
    }
}
