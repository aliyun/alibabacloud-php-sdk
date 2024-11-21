<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\GetSiteResponseBody\siteModel;
use AlibabaCloud\Tea\Model;

class GetSiteResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 9732E117-8A37-49FD-A36F-ABBB87556CA7
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The queried website information.
     *
     * @var siteModel
     */
    public $siteModel;
    protected $_name = [
        'requestId' => 'RequestId',
        'siteModel' => 'SiteModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->siteModel) {
            $res['SiteModel'] = null !== $this->siteModel ? $this->siteModel->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSiteResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SiteModel'])) {
            $model->siteModel = siteModel::fromMap($map['SiteModel']);
        }

        return $model;
    }
}
