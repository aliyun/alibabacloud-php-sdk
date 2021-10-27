<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class MyCatConnectTestRequest extends Model
{
    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $ruleUrl;

    /**
     * @var string
     */
    public $schemaUrl;
    protected $_name = [
        'dbName'    => 'DbName',
        'regionId'  => 'RegionId',
        'ruleUrl'   => 'RuleUrl',
        'schemaUrl' => 'SchemaUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ruleUrl) {
            $res['RuleUrl'] = $this->ruleUrl;
        }
        if (null !== $this->schemaUrl) {
            $res['SchemaUrl'] = $this->schemaUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MyCatConnectTestRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RuleUrl'])) {
            $model->ruleUrl = $map['RuleUrl'];
        }
        if (isset($map['SchemaUrl'])) {
            $model->schemaUrl = $map['SchemaUrl'];
        }

        return $model;
    }
}
