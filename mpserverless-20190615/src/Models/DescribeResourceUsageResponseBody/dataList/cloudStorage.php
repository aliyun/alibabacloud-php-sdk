<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeResourceUsageResponseBody\dataList;

use AlibabaCloud\Tea\Model;

class cloudStorage extends Model
{
    /**
     * @var int
     */
    public $dataSize;

    /**
     * @var int
     */
    public $download;

    /**
     * @var int
     */
    public $traffic;

    /**
     * @var int
     */
    public $upload;
    protected $_name = [
        'dataSize' => 'DataSize',
        'download' => 'Download',
        'traffic'  => 'Traffic',
        'upload'   => 'Upload',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }
        if (null !== $this->download) {
            $res['Download'] = $this->download;
        }
        if (null !== $this->traffic) {
            $res['Traffic'] = $this->traffic;
        }
        if (null !== $this->upload) {
            $res['Upload'] = $this->upload;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cloudStorage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }
        if (isset($map['Download'])) {
            $model->download = $map['Download'];
        }
        if (isset($map['Traffic'])) {
            $model->traffic = $map['Traffic'];
        }
        if (isset($map['Upload'])) {
            $model->upload = $map['Upload'];
        }

        return $model;
    }
}
