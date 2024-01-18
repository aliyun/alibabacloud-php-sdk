<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Tea\Model;

class FileUploadRequest extends Model
{
    /**
     * @example 0r2LSuIsHlxEoGZcnGe34U1njBOR83Q4HNSvMDGrDPK5J71VjcGdRIWz2x3+tFxvQaduwHB46Z9K
     * SR/kULQZHsDDd2zgA9RRTsEQF2OSxFFFx2P/2Q==
     * @var string
     */
    public $fileContent;

    /**
     * @example 496***2617111
     *
     * @var int
     */
    public $orderNum;
    protected $_name = [
        'fileContent' => 'file_content',
        'orderNum'    => 'order_num',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileContent) {
            $res['file_content'] = $this->fileContent;
        }
        if (null !== $this->orderNum) {
            $res['order_num'] = $this->orderNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FileUploadRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['file_content'])) {
            $model->fileContent = $map['file_content'];
        }
        if (isset($map['order_num'])) {
            $model->orderNum = $map['order_num'];
        }

        return $model;
    }
}
