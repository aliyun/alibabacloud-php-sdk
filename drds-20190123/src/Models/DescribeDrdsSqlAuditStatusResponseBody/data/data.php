<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsSqlAuditStatusResponseBody\data;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $detailed;

    /**
     * @var string
     */
    public $enabled;

    /**
     * @var int
     */
    public $extraAliUid;

    /**
     * @var string
     */
    public $extraSlsLogStore;

    /**
     * @var string
     */
    public $extraSlsProject;

    /**
     * @var bool
     */
    public $extraWriteEnabled;
    protected $_name = [
        'dbName' => 'DbName',
        'detailed' => 'Detailed',
        'enabled' => 'Enabled',
        'extraAliUid' => 'ExtraAliUid',
        'extraSlsLogStore' => 'ExtraSlsLogStore',
        'extraSlsProject' => 'ExtraSlsProject',
        'extraWriteEnabled' => 'ExtraWriteEnabled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->detailed) {
            $res['Detailed'] = $this->detailed;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->extraAliUid) {
            $res['ExtraAliUid'] = $this->extraAliUid;
        }

        if (null !== $this->extraSlsLogStore) {
            $res['ExtraSlsLogStore'] = $this->extraSlsLogStore;
        }

        if (null !== $this->extraSlsProject) {
            $res['ExtraSlsProject'] = $this->extraSlsProject;
        }

        if (null !== $this->extraWriteEnabled) {
            $res['ExtraWriteEnabled'] = $this->extraWriteEnabled;
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
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        if (isset($map['Detailed'])) {
            $model->detailed = $map['Detailed'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['ExtraAliUid'])) {
            $model->extraAliUid = $map['ExtraAliUid'];
        }

        if (isset($map['ExtraSlsLogStore'])) {
            $model->extraSlsLogStore = $map['ExtraSlsLogStore'];
        }

        if (isset($map['ExtraSlsProject'])) {
            $model->extraSlsProject = $map['ExtraSlsProject'];
        }

        if (isset($map['ExtraWriteEnabled'])) {
            $model->extraWriteEnabled = $map['ExtraWriteEnabled'];
        }

        return $model;
    }
}
