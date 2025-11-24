<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail\HTTPAdvancedOptions\delegate;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail\HTTPAdvancedOptions\fault;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail\HTTPAdvancedOptions\HTTPRedirect;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail\HTTPAdvancedOptions\mirror;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail\HTTPAdvancedOptions\mirrorPercentage;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail\HTTPAdvancedOptions\retries;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail\HTTPAdvancedOptions\rewrite;

class HTTPAdvancedOptions extends Model
{
    /**
     * @var delegate
     */
    public $delegate;

    /**
     * @var fault
     */
    public $fault;

    /**
     * @var HTTPRedirect
     */
    public $HTTPRedirect;

    /**
     * @var mirror
     */
    public $mirror;

    /**
     * @var mirrorPercentage
     */
    public $mirrorPercentage;

    /**
     * @var retries
     */
    public $retries;

    /**
     * @var rewrite
     */
    public $rewrite;

    /**
     * @var string
     */
    public $timeout;
    protected $_name = [
        'delegate' => 'Delegate',
        'fault' => 'Fault',
        'HTTPRedirect' => 'HTTPRedirect',
        'mirror' => 'Mirror',
        'mirrorPercentage' => 'MirrorPercentage',
        'retries' => 'Retries',
        'rewrite' => 'Rewrite',
        'timeout' => 'Timeout',
    ];

    public function validate()
    {
        if (null !== $this->delegate) {
            $this->delegate->validate();
        }
        if (null !== $this->fault) {
            $this->fault->validate();
        }
        if (null !== $this->HTTPRedirect) {
            $this->HTTPRedirect->validate();
        }
        if (null !== $this->mirror) {
            $this->mirror->validate();
        }
        if (null !== $this->mirrorPercentage) {
            $this->mirrorPercentage->validate();
        }
        if (null !== $this->retries) {
            $this->retries->validate();
        }
        if (null !== $this->rewrite) {
            $this->rewrite->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->delegate) {
            $res['Delegate'] = null !== $this->delegate ? $this->delegate->toArray($noStream) : $this->delegate;
        }

        if (null !== $this->fault) {
            $res['Fault'] = null !== $this->fault ? $this->fault->toArray($noStream) : $this->fault;
        }

        if (null !== $this->HTTPRedirect) {
            $res['HTTPRedirect'] = null !== $this->HTTPRedirect ? $this->HTTPRedirect->toArray($noStream) : $this->HTTPRedirect;
        }

        if (null !== $this->mirror) {
            $res['Mirror'] = null !== $this->mirror ? $this->mirror->toArray($noStream) : $this->mirror;
        }

        if (null !== $this->mirrorPercentage) {
            $res['MirrorPercentage'] = null !== $this->mirrorPercentage ? $this->mirrorPercentage->toArray($noStream) : $this->mirrorPercentage;
        }

        if (null !== $this->retries) {
            $res['Retries'] = null !== $this->retries ? $this->retries->toArray($noStream) : $this->retries;
        }

        if (null !== $this->rewrite) {
            $res['Rewrite'] = null !== $this->rewrite ? $this->rewrite->toArray($noStream) : $this->rewrite;
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
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
        if (isset($map['Delegate'])) {
            $model->delegate = delegate::fromMap($map['Delegate']);
        }

        if (isset($map['Fault'])) {
            $model->fault = fault::fromMap($map['Fault']);
        }

        if (isset($map['HTTPRedirect'])) {
            $model->HTTPRedirect = HTTPRedirect::fromMap($map['HTTPRedirect']);
        }

        if (isset($map['Mirror'])) {
            $model->mirror = mirror::fromMap($map['Mirror']);
        }

        if (isset($map['MirrorPercentage'])) {
            $model->mirrorPercentage = mirrorPercentage::fromMap($map['MirrorPercentage']);
        }

        if (isset($map['Retries'])) {
            $model->retries = retries::fromMap($map['Retries']);
        }

        if (isset($map['Rewrite'])) {
            $model->rewrite = rewrite::fromMap($map['Rewrite']);
        }

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
