<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class DescribeOssTokenRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $uploadType;
    protected $_name = [
        'lang' => 'Lang',
        'fileName' => 'fileName',
        'regId' => 'regId',
        'uploadType' => 'uploadType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }

        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }

        if (null !== $this->uploadType) {
            $res['uploadType'] = $this->uploadType;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }

        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }

        if (isset($map['uploadType'])) {
            $model->uploadType = $map['uploadType'];
        }

        return $model;
    }
}
