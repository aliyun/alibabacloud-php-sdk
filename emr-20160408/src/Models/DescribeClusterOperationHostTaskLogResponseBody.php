<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterOperationHostTaskLogResponseBody extends Model
{
    /**
     * @example 4CD0BBA0-AC8A-4239-A219-953472BEB4F6
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2018-11-27 14:21:59========================================================================================================== Tue, 27 Nov 2018 14:21:59 IlogtaildComponentOperator.py[line:140] INFO ilogtail has been started, return
     *
     * @var string
     */
    public $stderr;

    /**
     * @example 2018-11-27 14:21:59========================================================================================================== touch -c /var/lib/ecm-agent/cache/ecm/service/ILOGTAIL/1.0.0.0.1-df/package/scripts/IlogtaildComponentOperator.py touch -c /var/lib/ecm-agent/cache/ecm/service/ILOGTAIL/1.0.0.0.1-df/package/scripts/IlogtaildConfigService.py root 2844 0.0 0.0 49244 2380 ? Ss 14:20 0:00 /usr/local/ilogtail/ilogtail root 2846 0.5 0.2 231416 18352 ? Sl 14:20 0:00 /usr/local/ilogtail/ilogtail   Command completed successfully!
     *
     * @var string
     */
    public $stdout;
    protected $_name = [
        'requestId' => 'RequestId',
        'stderr'    => 'Stderr',
        'stdout'    => 'Stdout',
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
        if (null !== $this->stderr) {
            $res['Stderr'] = $this->stderr;
        }
        if (null !== $this->stdout) {
            $res['Stdout'] = $this->stdout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterOperationHostTaskLogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Stderr'])) {
            $model->stderr = $map['Stderr'];
        }
        if (isset($map['Stdout'])) {
            $model->stdout = $map['Stdout'];
        }

        return $model;
    }
}
