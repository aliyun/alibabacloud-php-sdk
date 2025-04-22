<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class GetUploadUrlResponseBody extends Model
{
    /**
     * @var string
     */
    public $createAt;

    /**
     * @var string
     */
    public $domainId;

    /**
     * @var string
     */
    public $driveId;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var UploadPartInfo[]
     */
    public $partInfoList;

    /**
     * @var string
     */
    public $uploadId;
    protected $_name = [
        'createAt' => 'create_at',
        'domainId' => 'domain_id',
        'driveId' => 'drive_id',
        'fileId' => 'file_id',
        'partInfoList' => 'part_info_list',
        'uploadId' => 'upload_id',
    ];

    public function validate()
    {
        if (\is_array($this->partInfoList)) {
            Model::validateArray($this->partInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createAt) {
            $res['create_at'] = $this->createAt;
        }

        if (null !== $this->domainId) {
            $res['domain_id'] = $this->domainId;
        }

        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }

        if (null !== $this->fileId) {
            $res['file_id'] = $this->fileId;
        }

        if (null !== $this->partInfoList) {
            if (\is_array($this->partInfoList)) {
                $res['part_info_list'] = [];
                $n1 = 0;
                foreach ($this->partInfoList as $item1) {
                    $res['part_info_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->uploadId) {
            $res['upload_id'] = $this->uploadId;
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
        if (isset($map['create_at'])) {
            $model->createAt = $map['create_at'];
        }

        if (isset($map['domain_id'])) {
            $model->domainId = $map['domain_id'];
        }

        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }

        if (isset($map['file_id'])) {
            $model->fileId = $map['file_id'];
        }

        if (isset($map['part_info_list'])) {
            if (!empty($map['part_info_list'])) {
                $model->partInfoList = [];
                $n1 = 0;
                foreach ($map['part_info_list'] as $item1) {
                    $model->partInfoList[$n1++] = UploadPartInfo::fromMap($item1);
                }
            }
        }

        if (isset($map['upload_id'])) {
            $model->uploadId = $map['upload_id'];
        }

        return $model;
    }
}
