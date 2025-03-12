<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListHoneypotProbeRequest extends Model
{
    /**
     * @description The number of the page to return. Pages start from page **1**. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The name of the probe.
     *
     * @example probe-test
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The number of entries to return on each page. Default value: 20. If you leave this parameter empty, 20 entries are returned on each page.
     *
     * > We recommend that you do not leave this parameter empty.
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The status of the probe. Valid values:
     *
     *   **installed**: installed
     *   **install_failed**: installation failed
     *   **online**: online
     *   **offline**: offline
     *   **unnormal**: abnormal
     *   **unprobe**: unauthorized
     *   **uninstalling**: being uninstalled
     *   **uninstalled**: uninstalled
     *   **uninstall_failed**: uninstallation failed
     *   **not_exist**: not installed
     *
     * @example online
     *
     * @var string
     */
    public $probeStatus;

    /**
     * @description The type of the probe. Valid values:
     *
     *   **host_probe**: host probe
     *   **vpc_black_hole_probe**: VPC probe
     *
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
