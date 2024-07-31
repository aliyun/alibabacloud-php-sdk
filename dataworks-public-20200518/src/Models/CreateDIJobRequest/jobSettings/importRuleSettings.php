<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDIJobRequest\jobSettings;

use AlibabaCloud\Tea\Model;

class importRuleSettings extends Model
{
    /**
     * @description The ID of the task to be imported.
     *
     * @example 10000
     *
     * @var string
     */
    public $fileId;

    /**
     * @description The import source of the task. Set the value to Datastudio, which indicates synchronization tasks created in DataStudio.
     *
     * @example Datastudio
     *
     * @var string
     */
    public $source;
    protected $_name = [
        'fileId' => 'FileId',
        'source' => 'Source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return importRuleSettings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
