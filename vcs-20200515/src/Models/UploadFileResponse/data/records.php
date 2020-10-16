<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\UploadFileResponse\data;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $ossPath;

    /**
     * @var string
     */
    public $sourceId;
    protected $_name = [
        'ossPath'  => 'OssPath',
        'sourceId' => 'SourceId',
    ];

    public function validate()
    {
        Model::validateRequired('ossPath', $this->ossPath, true);
        Model::validateRequired('sourceId', $this->sourceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ossPath) {
            $res['OssPath'] = $this->ossPath;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OssPath'])) {
            $model->ossPath = $map['OssPath'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }

        return $model;
    }
}
