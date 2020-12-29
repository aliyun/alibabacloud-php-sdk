<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20180713\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserCertificateListRequest extends Model
{
    /**
     * @var int
     */
    public $showSize;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $lang;
    protected $_name = [
        'showSize'    => 'ShowSize',
        'currentPage' => 'CurrentPage',
        'sourceIp'    => 'SourceIp',
        'lang'        => 'Lang',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->showSize) {
            $res['ShowSize'] = $this->showSize;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserCertificateListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ShowSize'])) {
            $model->showSize = $map['ShowSize'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
