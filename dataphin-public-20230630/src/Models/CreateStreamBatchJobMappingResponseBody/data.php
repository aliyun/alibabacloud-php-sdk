<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateStreamBatchJobMappingResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 7083701105376640
     *
     * @var string
     */
    public $fileId;

    /**
     * @example /dev/streamJob/7083701105376640?env=DEV&projectId=7081229106458752&tenantId=300001420
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'fileId' => 'FileId',
        'url' => 'Url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
