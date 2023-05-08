<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class QueryGroupedSecurityEventMarkMissListRequest extends Model
{
    /**
     * @description The number of entries to return on each page. Default value: **20**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The name of the alert event. The value indicates a subtype.
     *
     * @example 1
     *
     * @var string
     */
    public $disposalWay;

    /**
     * @description The operator. Valid values:
     *
     *   **contains**: contains
     *   **notContains**: does not contain
     *   **strEqual**: equals
     *   **strNotEqual**: does not equal
     *   **regex**: regular expression
     *
     * @example Login with unusual location
     *
     * @var string
     */
    public $eventName;

    /**
     * @description The ID of the request source. Set the value to sas.
     *
     * @example sas
     *
     * @var string
     */
    public $from;

    /**
     * @description The status code returned. The status code **200** indicates that the request is successful. Other status codes indicate that the request fails. You can identify the cause of the failure based on the status code.
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The error message returned.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the user.
     *
     * @example 222.185.XX.XX
     *
     * @var string
     */
    public $remark;

    /**
     * @description The field that is used in the whitelist rule.
     *
     * @example 113.66.XX.XX
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'disposalWay' => 'DisposalWay',
        'eventName'   => 'EventName',
        'from'        => 'From',
        'lang'        => 'Lang',
        'pageSize'    => 'PageSize',
        'remark'      => 'Remark',
        'sourceIp'    => 'SourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->disposalWay) {
            $res['DisposalWay'] = $this->disposalWay;
        }
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryGroupedSecurityEventMarkMissListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['DisposalWay'])) {
            $model->disposalWay = $map['DisposalWay'];
        }
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
