<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iqa\V20190813\Models;

use AlibabaCloud\Tea\Model;

class UploadDictionaryRequest extends Model
{
    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $dictionaryFileUrl;

    /**
     * @var string
     */
    public $dictionaryData;
    protected $_name = [
        'projectId'         => 'ProjectId',
        'dictionaryFileUrl' => 'DictionaryFileUrl',
        'dictionaryData'    => 'DictionaryData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->dictionaryFileUrl) {
            $res['DictionaryFileUrl'] = $this->dictionaryFileUrl;
        }
        if (null !== $this->dictionaryData) {
            $res['DictionaryData'] = $this->dictionaryData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadDictionaryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['DictionaryFileUrl'])) {
            $model->dictionaryFileUrl = $map['DictionaryFileUrl'];
        }
        if (isset($map['DictionaryData'])) {
            $model->dictionaryData = $map['DictionaryData'];
        }

        return $model;
    }
}
