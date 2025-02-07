<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSiteResponseBody\siteModel;

class GetSiteResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var siteModel
     */
    public $siteModel;
    protected $_name = [
        'requestId' => 'RequestId',
        'siteModel' => 'SiteModel',
    ];

    public function validate()
    {
        if (null !== $this->siteModel) {
            $this->siteModel->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->siteModel) {
            $res['SiteModel'] = null !== $this->siteModel ? $this->siteModel->toArray($noStream) : $this->siteModel;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SiteModel'])) {
            $model->siteModel = siteModel::fromMap($map['SiteModel']);
        }

        return $model;
    }
}
