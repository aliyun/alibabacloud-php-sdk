<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListHoneypotProbeRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @example probe-test
     *
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @example online
     *
     * @var string
     */
    public $probeStatus;

    /**
     * @example host_probe
     *
     * @var string
     */
    public $probeType;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'displayName' => 'DisplayName',
        'lang'        => 'Lang',
        'pageSize'    => 'PageSize',
        'probeStatus' => 'ProbeStatus',
        'probeType'   => 'ProbeType',
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
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->probeStatus) {
            $res['ProbeStatus'] = $this->probeStatus;
        }
        if (null !== $this->probeType) {
            $res['ProbeType'] = $this->probeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHoneypotProbeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProbeStatus'])) {
            $model->probeStatus = $map['ProbeStatus'];
        }
        if (isset($map['ProbeType'])) {
            $model->probeType = $map['ProbeType'];
        }

        return $model;
    }
}
