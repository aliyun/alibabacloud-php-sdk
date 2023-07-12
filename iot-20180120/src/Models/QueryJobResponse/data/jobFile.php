<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryJobResponse\data;

use AlibabaCloud\Tea\Model;

class jobFile extends Model
{
    /**
     * @var string
     */
    public $fileUrl;

    /**
     * @var string
     */
    public $sign;

    /**
     * @var string
     */
    public $signMethod;
    protected $_name = [
        'fileUrl'    => 'FileUrl',
        'sign'       => 'Sign',
        'signMethod' => 'SignMethod',
    ];

    public function validate()
    {
        Model::validateRequired('fileUrl', $this->fileUrl, true);
        Model::validateRequired('sign', $this->sign, true);
        Model::validateRequired('signMethod', $this->signMethod, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->sign) {
            $res['Sign'] = $this->sign;
        }
        if (null !== $this->signMethod) {
            $res['SignMethod'] = $this->signMethod;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobFile
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['Sign'])) {
            $model->sign = $map['Sign'];
        }
        if (isset($map['SignMethod'])) {
            $model->signMethod = $map['SignMethod'];
        }

        return $model;
    }
}
