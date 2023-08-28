<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class StreamUploadInfo extends Model
{
    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $location;

    /**
     * @var UploadPartInfo[]
     */
    public $partInfoList;

    /**
     * @example false
     *
     * @var bool
     */
    public $preRapidUpload;

    /**
     * @example false
     *
     * @var bool
     */
    public $rapidUpload;

    /**
     * @example abcd
     *
     * @var string
     */
    public $uploadId;
    protected $_name = [
        'location'       => 'location',
        'partInfoList'   => 'part_info_list',
        'preRapidUpload' => 'pre_rapid_upload',
        'rapidUpload'    => 'rapid_upload',
        'uploadId'       => 'upload_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->location) {
            $res['location'] = $this->location;
        }
        if (null !== $this->partInfoList) {
            $res['part_info_list'] = [];
            if (null !== $this->partInfoList && \is_array($this->partInfoList)) {
                $n = 0;
                foreach ($this->partInfoList as $item) {
                    $res['part_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->preRapidUpload) {
            $res['pre_rapid_upload'] = $this->preRapidUpload;
        }
        if (null !== $this->rapidUpload) {
            $res['rapid_upload'] = $this->rapidUpload;
        }
        if (null !== $this->uploadId) {
            $res['upload_id'] = $this->uploadId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StreamUploadInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['location'])) {
            $model->location = $map['location'];
        }
        if (isset($map['part_info_list'])) {
            if (!empty($map['part_info_list'])) {
                $model->partInfoList = [];
                $n                   = 0;
                foreach ($map['part_info_list'] as $item) {
                    $model->partInfoList[$n++] = null !== $item ? UploadPartInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['pre_rapid_upload'])) {
            $model->preRapidUpload = $map['pre_rapid_upload'];
        }
        if (isset($map['rapid_upload'])) {
            $model->rapidUpload = $map['rapid_upload'];
        }
        if (isset($map['upload_id'])) {
            $model->uploadId = $map['upload_id'];
        }

        return $model;
    }
}
