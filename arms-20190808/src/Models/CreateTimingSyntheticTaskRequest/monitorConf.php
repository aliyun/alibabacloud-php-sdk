<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateTimingSyntheticTaskRequest;

use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateTimingSyntheticTaskRequest\monitorConf\apiHTTP;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateTimingSyntheticTaskRequest\monitorConf\fileDownload;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateTimingSyntheticTaskRequest\monitorConf\netDNS;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateTimingSyntheticTaskRequest\monitorConf\netICMP;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateTimingSyntheticTaskRequest\monitorConf\netTCP;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateTimingSyntheticTaskRequest\monitorConf\website;
use AlibabaCloud\Tea\Model;

class monitorConf extends Model
{
    /**
     * @var apiHTTP
     */
    public $apiHTTP;

    /**
     * @var fileDownload
     */
    public $fileDownload;

    /**
     * @var netDNS
     */
    public $netDNS;

    /**
     * @var netICMP
     */
    public $netICMP;

    /**
     * @var netTCP
     */
    public $netTCP;

    /**
     * @var website
     */
    public $website;
    protected $_name = [
        'apiHTTP'      => 'ApiHTTP',
        'fileDownload' => 'FileDownload',
        'netDNS'       => 'NetDNS',
        'netICMP'      => 'NetICMP',
        'netTCP'       => 'NetTCP',
        'website'      => 'Website',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiHTTP) {
            $res['ApiHTTP'] = null !== $this->apiHTTP ? $this->apiHTTP->toMap() : null;
        }
        if (null !== $this->fileDownload) {
            $res['FileDownload'] = null !== $this->fileDownload ? $this->fileDownload->toMap() : null;
        }
        if (null !== $this->netDNS) {
            $res['NetDNS'] = null !== $this->netDNS ? $this->netDNS->toMap() : null;
        }
        if (null !== $this->netICMP) {
            $res['NetICMP'] = null !== $this->netICMP ? $this->netICMP->toMap() : null;
        }
        if (null !== $this->netTCP) {
            $res['NetTCP'] = null !== $this->netTCP ? $this->netTCP->toMap() : null;
        }
        if (null !== $this->website) {
            $res['Website'] = null !== $this->website ? $this->website->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return monitorConf
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiHTTP'])) {
            $model->apiHTTP = apiHTTP::fromMap($map['ApiHTTP']);
        }
        if (isset($map['FileDownload'])) {
            $model->fileDownload = fileDownload::fromMap($map['FileDownload']);
        }
        if (isset($map['NetDNS'])) {
            $model->netDNS = netDNS::fromMap($map['NetDNS']);
        }
        if (isset($map['NetICMP'])) {
            $model->netICMP = netICMP::fromMap($map['NetICMP']);
        }
        if (isset($map['NetTCP'])) {
            $model->netTCP = netTCP::fromMap($map['NetTCP']);
        }
        if (isset($map['Website'])) {
            $model->website = website::fromMap($map['Website']);
        }

        return $model;
    }
}
