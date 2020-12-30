<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeIpFlowReportResponseBody;

use AlibabaCloud\Tea\Model;

class ipFlowReportList extends Model
{
    /**
     * @var string
     */
    public $outpps;

    /**
     * @var string
     */
    public $cps;

    /**
     * @var string
     */
    public $inkbps;

    /**
     * @var string
     */
    public $inpps;

    /**
     * @var string
     */
    public $inbps;

    /**
     * @var bool
     */
    public $conns;

    /**
     * @var string
     */
    public $inpkts;

    /**
     * @var string
     */
    public $inbytes;

    /**
     * @var string
     */
    public $outbytes;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $actconns;

    /**
     * @var string
     */
    public $outbps;

    /**
     * @var string
     */
    public $outpkts;

    /**
     * @var string
     */
    public $vip;

    /**
     * @var string
     */
    public $qtime;

    /**
     * @var string
     */
    public $outkbps;

    /**
     * @var string
     */
    public $inactconns;
    protected $_name = [
        'outpps'      => 'Outpps',
        'cps'         => 'Cps',
        'inkbps'      => 'Inkbps',
        'inpps'       => 'Inpps',
        'inbps'       => 'Inbps',
        'conns'       => 'Conns',
        'inpkts'      => 'Inpkts',
        'inbytes'     => 'Inbytes',
        'outbytes'    => 'Outbytes',
        'clusterName' => 'ClusterName',
        'actconns'    => 'Actconns',
        'outbps'      => 'Outbps',
        'outpkts'     => 'Outpkts',
        'vip'         => 'Vip',
        'qtime'       => 'Qtime',
        'outkbps'     => 'Outkbps',
        'inactconns'  => 'Inactconns',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outpps) {
            $res['Outpps'] = $this->outpps;
        }
        if (null !== $this->cps) {
            $res['Cps'] = $this->cps;
        }
        if (null !== $this->inkbps) {
            $res['Inkbps'] = $this->inkbps;
        }
        if (null !== $this->inpps) {
            $res['Inpps'] = $this->inpps;
        }
        if (null !== $this->inbps) {
            $res['Inbps'] = $this->inbps;
        }
        if (null !== $this->conns) {
            $res['Conns'] = $this->conns;
        }
        if (null !== $this->inpkts) {
            $res['Inpkts'] = $this->inpkts;
        }
        if (null !== $this->inbytes) {
            $res['Inbytes'] = $this->inbytes;
        }
        if (null !== $this->outbytes) {
            $res['Outbytes'] = $this->outbytes;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->actconns) {
            $res['Actconns'] = $this->actconns;
        }
        if (null !== $this->outbps) {
            $res['Outbps'] = $this->outbps;
        }
        if (null !== $this->outpkts) {
            $res['Outpkts'] = $this->outpkts;
        }
        if (null !== $this->vip) {
            $res['Vip'] = $this->vip;
        }
        if (null !== $this->qtime) {
            $res['Qtime'] = $this->qtime;
        }
        if (null !== $this->outkbps) {
            $res['Outkbps'] = $this->outkbps;
        }
        if (null !== $this->inactconns) {
            $res['Inactconns'] = $this->inactconns;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipFlowReportList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Outpps'])) {
            $model->outpps = $map['Outpps'];
        }
        if (isset($map['Cps'])) {
            $model->cps = $map['Cps'];
        }
        if (isset($map['Inkbps'])) {
            $model->inkbps = $map['Inkbps'];
        }
        if (isset($map['Inpps'])) {
            $model->inpps = $map['Inpps'];
        }
        if (isset($map['Inbps'])) {
            $model->inbps = $map['Inbps'];
        }
        if (isset($map['Conns'])) {
            $model->conns = $map['Conns'];
        }
        if (isset($map['Inpkts'])) {
            $model->inpkts = $map['Inpkts'];
        }
        if (isset($map['Inbytes'])) {
            $model->inbytes = $map['Inbytes'];
        }
        if (isset($map['Outbytes'])) {
            $model->outbytes = $map['Outbytes'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['Actconns'])) {
            $model->actconns = $map['Actconns'];
        }
        if (isset($map['Outbps'])) {
            $model->outbps = $map['Outbps'];
        }
        if (isset($map['Outpkts'])) {
            $model->outpkts = $map['Outpkts'];
        }
        if (isset($map['Vip'])) {
            $model->vip = $map['Vip'];
        }
        if (isset($map['Qtime'])) {
            $model->qtime = $map['Qtime'];
        }
        if (isset($map['Outkbps'])) {
            $model->outkbps = $map['Outkbps'];
        }
        if (isset($map['Inactconns'])) {
            $model->inactconns = $map['Inactconns'];
        }

        return $model;
    }
}
