<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetParserResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1003
     *
     * @var int
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $description;

    /**
     * @example DataParser
     *
     * @var string
     */
    public $name;

    /**
     * @example 1001
     *
     * @var int
     */
    public $parserId;

    /**
     * @example var data = payload("json"); var h = data.items.Humidity.value; var t = data.items.Temperature.value; writeTsdb(1000,timestamp(),"temperature", t , {"deviceName":deviceName()}); writeTsdb(1000,timestamp(),"humidity", h , {"deviceName":deviceName()});
     *
     * @var string
     */
    public $script;

    /**
     * @example var data = payload("json"); var h = data.items.Humidity.value; var t = data.items.Temperature.value; writeTsdb(1000,timestamp(),"temperature", t , {"deviceName":deviceName()}); writeTsdb(1000,timestamp(),"humidity", h , {"deviceName":deviceName()});
     *
     * @var string
     */
    public $scriptDraft;

    /**
     * @example STOP
     *
     * @var string
     */
    public $status;

    /**
     * @example 2022-03-27T12:45:43.000Z
     *
     * @var string
     */
    public $utcCreated;

    /**
     * @example 2022-04-27T12:45:43.000Z
     *
     * @var string
     */
    public $utcModified;
    protected $_name = [
        'dataSourceId' => 'DataSourceId',
        'description'  => 'Description',
        'name'         => 'Name',
        'parserId'     => 'ParserId',
        'script'       => 'Script',
        'scriptDraft'  => 'ScriptDraft',
        'status'       => 'Status',
        'utcCreated'   => 'UtcCreated',
        'utcModified'  => 'UtcModified',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parserId) {
            $res['ParserId'] = $this->parserId;
        }
        if (null !== $this->script) {
            $res['Script'] = $this->script;
        }
        if (null !== $this->scriptDraft) {
            $res['ScriptDraft'] = $this->scriptDraft;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->utcCreated) {
            $res['UtcCreated'] = $this->utcCreated;
        }
        if (null !== $this->utcModified) {
            $res['UtcModified'] = $this->utcModified;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParserId'])) {
            $model->parserId = $map['ParserId'];
        }
        if (isset($map['Script'])) {
            $model->script = $map['Script'];
        }
        if (isset($map['ScriptDraft'])) {
            $model->scriptDraft = $map['ScriptDraft'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UtcCreated'])) {
            $model->utcCreated = $map['UtcCreated'];
        }
        if (isset($map['UtcModified'])) {
            $model->utcModified = $map['UtcModified'];
        }

        return $model;
    }
}
