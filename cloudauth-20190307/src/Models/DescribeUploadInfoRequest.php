<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class DescribeUploadInfoRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $biz;
    protected $_name = [
        'sourceIp' => 'SourceIp',
        'biz'      => 'Biz',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->biz) {
            $res['Biz'] = $this->biz;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUploadInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Biz'])) {
            $model->biz = $map['Biz'];
        }

        return $model;
    }
}
