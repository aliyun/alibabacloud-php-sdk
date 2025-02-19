<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengapm\V20220214\Models\GetH5PageTrendResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var float
     */
    public $analyzeDOM;
    /**
     * @var float
     */
    public $appCache;
    /**
     * @var float
     */
    public $contentTrans;
    /**
     * @var float
     */
    public $dns;
    /**
     * @var float
     */
    public $domReady;
    /**
     * @var float
     */
    public $fcp;
    /**
     * @var float
     */
    public $firstByte;
    /**
     * @var float
     */
    public $fiveSecondRate;
    /**
     * @var float
     */
    public $fp;
    /**
     * @var float
     */
    public $loadEvent;
    /**
     * @var float
     */
    public $loadFinish;
    /**
     * @var float
     */
    public $loadResource;
    /**
     * @var int
     */
    public $logCnt;
    /**
     * @var float
     */
    public $oneSecondRate;
    /**
     * @var float
     */
    public $redirect;
    /**
     * @var float
     */
    public $ssl;
    /**
     * @var float
     */
    public $tcp;
    /**
     * @var string
     */
    public $timePoint;
    /**
     * @var float
     */
    public $ttfb;
    /**
     * @var float
     */
    public $tti;
    /**
     * @var float
     */
    public $twoSecondRate;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
