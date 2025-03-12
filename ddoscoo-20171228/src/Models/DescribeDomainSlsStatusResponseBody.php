<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainSlsStatusResponseBody extends Model
{
    /**
     * @example CF33B4C3-196E-4015-AADD-5CAD00057B80
     *
     * @var string
     */
    public $requestId;

    /**
     * @example ddoscoo-logstore
     *
     * @var string
     */
    public $slsLogstore;

    /**
     * @example ddoscoo-project-xxxx-cn-hangzhou
     *
     * @var string
     */
    public $slsProject;

    /**
     * @example true
     *
     * @var bool
     */
    public $slsStatus;
    protected $_name = [
        'requestId'   => 'RequestId',
        'slsLogstore' => 'SlsLogstore',
        'slsProject'  => 'SlsProject',
        'slsStatus'   => 'SlsStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->slsLogstore) {
            $res['SlsLogstore'] = $this->slsLogstore;
        }
        if (null !== $this->slsProject) {
            $res['SlsProject'] = $this->slsProject;
        }
        if (null !== $this->slsStatus) {
            $res['SlsStatus'] = $this->slsStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainSlsStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SlsLogstore'])) {
            $model->slsLogstore = $map['SlsLogstore'];
        }
        if (isset($map['SlsProject'])) {
            $model->slsProject = $map['SlsProject'];
        }
        if (isset($map['SlsStatus'])) {
            $model->slsStatus = $map['SlsStatus'];
        }

        return $model;
    }
}
