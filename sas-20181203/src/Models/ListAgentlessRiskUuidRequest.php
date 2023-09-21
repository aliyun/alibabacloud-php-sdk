<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListAgentlessRiskUuidRequest extends Model
{
    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The public IP address of the asset that you want to query.
     *
     * @example 1.1.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address of the asset that you want to query.
     *
     * @example 172.26.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The name of the instance.
     *
     * @example oracle-win-001****
     *
     * @var string
     */
    public $machineName;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Specifies whether risks exist. Valid values:
     *
     *   **true**: Risks exist.
     *   **false**: Risks do not exist.
     *
     * @example true
     *
     * @var bool
     */
    public $risk;

    /**
     * @description The name of the detection object.
     *
     * @example source-test-obj-0****
     *
     * @var string
     */
    public $targetName;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'internetIp'  => 'InternetIp',
        'intranetIp'  => 'IntranetIp',
        'machineName' => 'MachineName',
        'pageSize'    => 'PageSize',
        'risk'        => 'Risk',
        'targetName'  => 'TargetName',
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
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->machineName) {
            $res['MachineName'] = $this->machineName;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->risk) {
            $res['Risk'] = $this->risk;
        }
        if (null !== $this->targetName) {
            $res['TargetName'] = $this->targetName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAgentlessRiskUuidRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['MachineName'])) {
            $model->machineName = $map['MachineName'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Risk'])) {
            $model->risk = $map['Risk'];
        }
        if (isset($map['TargetName'])) {
            $model->targetName = $map['TargetName'];
        }

        return $model;
    }
}
