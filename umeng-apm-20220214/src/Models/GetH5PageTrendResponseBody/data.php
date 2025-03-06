<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengapm\V20220214\Models\GetH5PageTrendResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 504.89
     *
     * @var float
     */
    public $analyzeDOM;

    /**
     * @example 49.48
     *
     * @var float
     */
    public $appCache;

    /**
     * @example 979.83
     *
     * @var float
     */
    public $contentTrans;

    /**
     * @example 50.16
     *
     * @var float
     */
    public $dns;

    /**
     * @example 1881.96
     *
     * @var float
     */
    public $domReady;

    /**
     * @example 190.69
     *
     * @var float
     */
    public $fcp;

    /**
     * @example 472.57
     *
     * @var float
     */
    public $firstByte;

    /**
     * @example 44.67
     *
     * @var float
     */
    public $fiveSecondRate;

    /**
     * @example 50.25
     *
     * @var float
     */
    public $fp;

    /**
     * @example 492.86
     *
     * @var float
     */
    public $loadEvent;

    /**
     * @example 4741.44
     *
     * @var float
     */
    public $loadFinish;

    /**
     * @example 2549.46
     *
     * @var float
     */
    public $loadResource;

    /**
     * @example 2062
     *
     * @var int
     */
    public $logCnt;

    /**
     * @example 0.19
     *
     * @var float
     */
    public $oneSecondRate;

    /**
     * @example 100.93
     *
     * @var float
     */
    public $redirect;

    /**
     * @example 71.02
     *
     * @var float
     */
    public $ssl;

    /**
     * @example 150.18
     *
     * @var float
     */
    public $tcp;

    /**
     * @example 2023-05-20
     *
     * @var string
     */
    public $timePoint;

    /**
     * @example 249.55
     *
     * @var float
     */
    public $ttfb;

    /**
     * @example 2126.61
     *
     * @var float
     */
    public $tti;

    /**
     * @example 4.9
     *
     * @var float
     */
    public $twoSecondRate;

    /**
     * @example 98.26
     *
     * @var float
     */
    public $unload;
    protected $_name = [
        'analyzeDOM'     => 'analyzeDOM',
        'appCache'       => 'appCache',
        'contentTrans'   => 'contentTrans',
        'dns'            => 'dns',
        'domReady'       => 'domReady',
        'fcp'            => 'fcp',
        'firstByte'      => 'firstByte',
        'fiveSecondRate' => 'fiveSecondRate',
        'fp'             => 'fp',
        'loadEvent'      => 'loadEvent',
        'loadFinish'     => 'loadFinish',
        'loadResource'   => 'loadResource',
        'logCnt'         => 'logCnt',
        'oneSecondRate'  => 'oneSecondRate',
        'redirect'       => 'redirect',
        'ssl'            => 'ssl',
        'tcp'            => 'tcp',
        'timePoint'      => 'timePoint',
        'ttfb'           => 'ttfb',
        'tti'            => 'tti',
        'twoSecondRate'  => 'twoSecondRate',
        'unload'         => 'unload',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->analyzeDOM) {
            $res['analyzeDOM'] = $this->analyzeDOM;
        }
        if (null !== $this->appCache) {
            $res['appCache'] = $this->appCache;
        }
        if (null !== $this->contentTrans) {
            $res['contentTrans'] = $this->contentTrans;
        }
        if (null !== $this->dns) {
            $res['dns'] = $this->dns;
        }
        if (null !== $this->domReady) {
            $res['domReady'] = $this->domReady;
        }
        if (null !== $this->fcp) {
            $res['fcp'] = $this->fcp;
        }
        if (null !== $this->firstByte) {
            $res['firstByte'] = $this->firstByte;
        }
        if (null !== $this->fiveSecondRate) {
            $res['fiveSecondRate'] = $this->fiveSecondRate;
        }
        if (null !== $this->fp) {
            $res['fp'] = $this->fp;
        }
        if (null !== $this->loadEvent) {
            $res['loadEvent'] = $this->loadEvent;
        }
        if (null !== $this->loadFinish) {
            $res['loadFinish'] = $this->loadFinish;
        }
        if (null !== $this->loadResource) {
            $res['loadResource'] = $this->loadResource;
        }
        if (null !== $this->logCnt) {
            $res['logCnt'] = $this->logCnt;
        }
        if (null !== $this->oneSecondRate) {
            $res['oneSecondRate'] = $this->oneSecondRate;
        }
        if (null !== $this->redirect) {
            $res['redirect'] = $this->redirect;
        }
        if (null !== $this->ssl) {
            $res['ssl'] = $this->ssl;
        }
        if (null !== $this->tcp) {
            $res['tcp'] = $this->tcp;
        }
        if (null !== $this->timePoint) {
            $res['timePoint'] = $this->timePoint;
        }
        if (null !== $this->ttfb) {
            $res['ttfb'] = $this->ttfb;
        }
        if (null !== $this->tti) {
            $res['tti'] = $this->tti;
        }
        if (null !== $this->twoSecondRate) {
            $res['twoSecondRate'] = $this->twoSecondRate;
        }
        if (null !== $this->unload) {
            $res['unload'] = $this->unload;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['analyzeDOM'])) {
            $model->analyzeDOM = $map['analyzeDOM'];
        }
        if (isset($map['appCache'])) {
            $model->appCache = $map['appCache'];
        }
        if (isset($map['contentTrans'])) {
            $model->contentTrans = $map['contentTrans'];
        }
        if (isset($map['dns'])) {
            $model->dns = $map['dns'];
        }
        if (isset($map['domReady'])) {
            $model->domReady = $map['domReady'];
        }
        if (isset($map['fcp'])) {
            $model->fcp = $map['fcp'];
        }
        if (isset($map['firstByte'])) {
            $model->firstByte = $map['firstByte'];
        }
        if (isset($map['fiveSecondRate'])) {
            $model->fiveSecondRate = $map['fiveSecondRate'];
        }
        if (isset($map['fp'])) {
            $model->fp = $map['fp'];
        }
        if (isset($map['loadEvent'])) {
            $model->loadEvent = $map['loadEvent'];
        }
        if (isset($map['loadFinish'])) {
            $model->loadFinish = $map['loadFinish'];
        }
        if (isset($map['loadResource'])) {
            $model->loadResource = $map['loadResource'];
        }
        if (isset($map['logCnt'])) {
            $model->logCnt = $map['logCnt'];
        }
        if (isset($map['oneSecondRate'])) {
            $model->oneSecondRate = $map['oneSecondRate'];
        }
        if (isset($map['redirect'])) {
            $model->redirect = $map['redirect'];
        }
        if (isset($map['ssl'])) {
            $model->ssl = $map['ssl'];
        }
        if (isset($map['tcp'])) {
            $model->tcp = $map['tcp'];
        }
        if (isset($map['timePoint'])) {
            $model->timePoint = $map['timePoint'];
        }
        if (isset($map['ttfb'])) {
            $model->ttfb = $map['ttfb'];
        }
        if (isset($map['tti'])) {
            $model->tti = $map['tti'];
        }
        if (isset($map['twoSecondRate'])) {
            $model->twoSecondRate = $map['twoSecondRate'];
        }
        if (isset($map['unload'])) {
            $model->unload = $map['unload'];
        }

        return $model;
    }
}
