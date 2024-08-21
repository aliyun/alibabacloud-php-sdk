<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class ListCloudAccessRequest extends Model
{
    /**
     * @description The cloud service provider.
     *
     * @example Tencent
     *
     * @var string
     */
    public $cloudName;

    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The AccessKey secret used to access the cloud service.
     *
     * @example 276
     *
     * @var string
     */
    public $secretId;

    /**
     * @description The number of certificates per page. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $showSize;
    protected $_name = [
        'cloudName'   => 'CloudName',
        'currentPage' => 'CurrentPage',
        'secretId'    => 'SecretId',
        'showSize'    => 'ShowSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudName) {
            $res['CloudName'] = $this->cloudName;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->secretId) {
            $res['SecretId'] = $this->secretId;
        }
        if (null !== $this->showSize) {
            $res['ShowSize'] = $this->showSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCloudAccessRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloudName'])) {
            $model->cloudName = $map['CloudName'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['SecretId'])) {
            $model->secretId = $map['SecretId'];
        }
        if (isset($map['ShowSize'])) {
            $model->showSize = $map['ShowSize'];
        }

        return $model;
    }
}
