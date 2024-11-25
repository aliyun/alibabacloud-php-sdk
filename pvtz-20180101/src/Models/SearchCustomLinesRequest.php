<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Tea\Model;

class SearchCustomLinesRequest extends Model
{
    /**
     * @description The end of the time range during which the custom lines are created to query. Set the time to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1672136518234
     *
     * @var int
     */
    public $createTimestampEnd;

    /**
     * @description The beginning of the time range during which the custom lines are created to query. Set the time to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1672136518123
     *
     * @var int
     */
    public $createTimestampStart;

    /**
     * @description The IDs of the creators for the custom lines.
     *
     * @var string[]
     */
    public $creator;

    /**
     * @description The IPv4 address.
     *
     * @example 1.1.1.1
     *
     * @var string
     */
    public $ipv4;

    /**
     * @description The language.
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The name of the custom line.
     *
     * @var string
     */
    public $name;

    /**
     * @description The page number. Pages start from page **1**. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values: **1 to 100**. Default value: **10**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The end of the time range during which the custom lines are updated to query. Set the time to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1672136518000
     *
     * @var int
     */
    public $updateTimestampEnd;

    /**
     * @description The beginning of the time range during which the custom lines are updated to query. Set the time to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1672136515000
     *
     * @var int
     */
    public $updateTimestampStart;
    protected $_name = [
        'createTimestampEnd'   => 'CreateTimestampEnd',
        'createTimestampStart' => 'CreateTimestampStart',
        'creator'              => 'Creator',
        'ipv4'                 => 'Ipv4',
        'lang'                 => 'Lang',
        'name'                 => 'Name',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'updateTimestampEnd'   => 'UpdateTimestampEnd',
        'updateTimestampStart' => 'UpdateTimestampStart',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTimestampEnd) {
            $res['CreateTimestampEnd'] = $this->createTimestampEnd;
        }
        if (null !== $this->createTimestampStart) {
            $res['CreateTimestampStart'] = $this->createTimestampStart;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->ipv4) {
            $res['Ipv4'] = $this->ipv4;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->updateTimestampEnd) {
            $res['UpdateTimestampEnd'] = $this->updateTimestampEnd;
        }
        if (null !== $this->updateTimestampStart) {
            $res['UpdateTimestampStart'] = $this->updateTimestampStart;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchCustomLinesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTimestampEnd'])) {
            $model->createTimestampEnd = $map['CreateTimestampEnd'];
        }
        if (isset($map['CreateTimestampStart'])) {
            $model->createTimestampStart = $map['CreateTimestampStart'];
        }
        if (isset($map['Creator'])) {
            if (!empty($map['Creator'])) {
                $model->creator = $map['Creator'];
            }
        }
        if (isset($map['Ipv4'])) {
            $model->ipv4 = $map['Ipv4'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['UpdateTimestampEnd'])) {
            $model->updateTimestampEnd = $map['UpdateTimestampEnd'];
        }
        if (isset($map['UpdateTimestampStart'])) {
            $model->updateTimestampStart = $map['UpdateTimestampStart'];
        }

        return $model;
    }
}
