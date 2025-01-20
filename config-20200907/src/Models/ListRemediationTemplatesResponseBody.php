<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\ListRemediationTemplatesResponseBody\remediationTemplates;

class ListRemediationTemplatesResponseBody extends Model
{
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var remediationTemplates[]
     */
    public $remediationTemplates;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'remediationTemplates' => 'RemediationTemplates',
        'requestId'            => 'RequestId',
        'totalCount'           => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->remediationTemplates)) {
            Model::validateArray($this->remediationTemplates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->remediationTemplates) {
            if (\is_array($this->remediationTemplates)) {
                $res['RemediationTemplates'] = [];
                $n1                          = 0;
                foreach ($this->remediationTemplates as $item1) {
                    $res['RemediationTemplates'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RemediationTemplates'])) {
            if (!empty($map['RemediationTemplates'])) {
                $model->remediationTemplates = [];
                $n1                          = 0;
                foreach ($map['RemediationTemplates'] as $item1) {
                    $model->remediationTemplates[$n1++] = remediationTemplates::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
