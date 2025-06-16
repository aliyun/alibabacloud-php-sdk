<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Dara\Model;

class FileUploadRequest extends Model
{
    /**
     * @var string
     */
    public $fileContent;

    /**
     * @var int
     */
    public $orderNum;
    protected $_name = [
        'fileContent' => 'file_content',
        'orderNum' => 'order_num',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
