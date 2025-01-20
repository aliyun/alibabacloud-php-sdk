<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncJobAnalyzeResultResponseBody\structSyncJobAnalyzeResult;

use AlibabaCloud\Dara\Model;

class resultList extends Model
{
    /**
     * @var string
     */
    public $script;
    /**
     * @var string
     */
    public $sourceTableName;
    /**
     * @var string
     */
    public $targetTableName;
    protected $_name = [
        'script'          => 'Script',
        'sourceTableName' => 'SourceTableName',
        'targetTableName' => 'TargetTableName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->script) {
            $res['Script'] = $this->script;
        }

        if (null !== $this->sourceTableName) {
            $res['SourceTableName'] = $this->sourceTableName;
        }

        if (null !== $this->targetTableName) {
            $res['TargetTableName'] = $this->targetTableName;
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
        if (isset($map['Script'])) {
            $model->script = $map['Script'];
        }

        if (isset($map['SourceTableName'])) {
            $model->sourceTableName = $map['SourceTableName'];
        }

        if (isset($map['TargetTableName'])) {
            $model->targetTableName = $map['TargetTableName'];
        }

        return $model;
    }
}
