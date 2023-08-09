<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\ListRemediationTemplatesResponseBody\remediationTemplates;
use AlibabaCloud\Tea\Model;

class ListRemediationTemplatesResponseBody extends Model
{
    /**
     * @description The page number. Pages start from page 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values: 1 to 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The description of the remediation template.
     *
     * @var remediationTemplates[]
     */
    public $remediationTemplates;

    /**
     * @description The ID of the request.
     *
     * @example FC2C4750-7024-499C-A69F-763543D1CBE3
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of remediation templates.
     *
     * @example 1
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->remediationTemplates) {
            $res['RemediationTemplates'] = [];
            if (null !== $this->remediationTemplates && \is_array($this->remediationTemplates)) {
                $n = 0;
                foreach ($this->remediationTemplates as $item) {
                    $res['RemediationTemplates'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return ListRemediationTemplatesResponseBody
     */
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
                $n                           = 0;
                foreach ($map['RemediationTemplates'] as $item) {
                    $model->remediationTemplates[$n++] = null !== $item ? remediationTemplates::fromMap($item) : $item;
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
