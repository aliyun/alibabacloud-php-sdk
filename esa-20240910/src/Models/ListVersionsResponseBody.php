<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListVersionsResponseBody\siteVersionList;

class ListVersionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var siteVersionList[]
     */
    public $siteVersionList;
    protected $_name = [
        'requestId' => 'RequestId',
        'siteVersionList' => 'SiteVersionList',
    ];

    public function validate()
    {
        if (\is_array($this->siteVersionList)) {
            Model::validateArray($this->siteVersionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->siteVersionList) {
            if (\is_array($this->siteVersionList)) {
                $res['SiteVersionList'] = [];
                $n1 = 0;
                foreach ($this->siteVersionList as $item1) {
                    $res['SiteVersionList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['SiteVersionList'])) {
            if (!empty($map['SiteVersionList'])) {
                $model->siteVersionList = [];
                $n1 = 0;
                foreach ($map['SiteVersionList'] as $item1) {
                    $model->siteVersionList[$n1] = siteVersionList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
