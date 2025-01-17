<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAffectedMaliciousFileImagesResponseBody\affectedMaliciousFileImagesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAffectedMaliciousFileImagesResponseBody\pageInfo;

class DescribeAffectedMaliciousFileImagesResponseBody extends Model
{
    /**
     * @var affectedMaliciousFileImagesResponse[]
     */
    public $affectedMaliciousFileImagesResponse;
    /**
     * @var pageInfo
     */
    public $pageInfo;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'affectedMaliciousFileImagesResponse' => 'AffectedMaliciousFileImagesResponse',
        'pageInfo'                            => 'PageInfo',
        'requestId'                           => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->affectedMaliciousFileImagesResponse)) {
            Model::validateArray($this->affectedMaliciousFileImagesResponse);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->affectedMaliciousFileImagesResponse) {
            if (\is_array($this->affectedMaliciousFileImagesResponse)) {
                $res['AffectedMaliciousFileImagesResponse'] = [];
                $n1                                         = 0;
                foreach ($this->affectedMaliciousFileImagesResponse as $item1) {
                    $res['AffectedMaliciousFileImagesResponse'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AffectedMaliciousFileImagesResponse'])) {
            if (!empty($map['AffectedMaliciousFileImagesResponse'])) {
                $model->affectedMaliciousFileImagesResponse = [];
                $n1                                         = 0;
                foreach ($map['AffectedMaliciousFileImagesResponse'] as $item1) {
                    $model->affectedMaliciousFileImagesResponse[$n1++] = affectedMaliciousFileImagesResponse::fromMap($item1);
                }
            }
        }

        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
