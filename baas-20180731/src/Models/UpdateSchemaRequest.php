<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class UpdateSchemaRequest extends Model
{
    /**
     * @var string
     */
    public $bizid;

    /**
     * @var string
     */
    public $categoryConfigs;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $schemaId;

    /**
     * @var string
     */
    public $schemaName;
    protected $_name = [
        'bizid'           => 'Bizid',
        'categoryConfigs' => 'CategoryConfigs',
        'description'     => 'Description',
        'schemaId'        => 'SchemaId',
        'schemaName'      => 'SchemaName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizid) {
            $res['Bizid'] = $this->bizid;
        }
        if (null !== $this->categoryConfigs) {
            $res['CategoryConfigs'] = $this->categoryConfigs;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->schemaId) {
            $res['SchemaId'] = $this->schemaId;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSchemaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bizid'])) {
            $model->bizid = $map['Bizid'];
        }
        if (isset($map['CategoryConfigs'])) {
            $model->categoryConfigs = $map['CategoryConfigs'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['SchemaId'])) {
            $model->schemaId = $map['SchemaId'];
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }

        return $model;
    }
}
