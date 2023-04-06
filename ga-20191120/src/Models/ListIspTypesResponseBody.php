<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class ListIspTypesResponseBody extends Model
{
    /**
     * @description The line types of EIPs in the acceleration region.
     *
     *   **BGP** (default): BGP (Multi-ISP) lines
     *   **BGP_PRO**: BGP (Multi-ISP) Pro lines
     *
     * If you have the permissions to use single-ISP bandwidth, one of the following values may be returned:
     *
     *   **ChinaTelecom**: China Telecom (single ISP)
     *   **ChinaUnicom**: China Unicom (single ISP)
     *   **ChinaMobile**: China Mobile (single ISP)
     *   **ChinaTelecom_L2**: China Telecom_L2 (single ISP)
     *   **ChinaUnicom_L2**: China Unicom_L2 (single ISP)
     *   **ChinaMobile_L2**: China Mobile_L2 (single ISP)
     *
     * > Different acceleration regions support different single-ISP BGP lines.
     * @var string[]
     */
    public $ispTypeList;

    /**
     * @description The ID of the request.
     *
     * @example F591955F-5CB5-4CCE-A75D-17CF2085CE22
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ispTypeList' => 'IspTypeList',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ispTypeList) {
            $res['IspTypeList'] = $this->ispTypeList;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIspTypesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IspTypeList'])) {
            if (!empty($map['IspTypeList'])) {
                $model->ispTypeList = $map['IspTypeList'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
