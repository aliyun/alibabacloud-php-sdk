<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Tea\Model;

class DescAccountSummary2ResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $mnsForceMigrating;

    /**
     * @var int
     */
    public $mnsBag;

    /**
     * @var int
     */
    public $mnsMigrating;
    protected $_name = [
        'requestId'         => 'RequestId',
        'mnsForceMigrating' => 'MnsForceMigrating',
        'mnsBag'            => 'MnsBag',
        'mnsMigrating'      => 'MnsMigrating',
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
        if (null !== $this->mnsForceMigrating) {
            $res['MnsForceMigrating'] = $this->mnsForceMigrating;
        }
        if (null !== $this->mnsBag) {
            $res['MnsBag'] = $this->mnsBag;
        }
        if (null !== $this->mnsMigrating) {
            $res['MnsMigrating'] = $this->mnsMigrating;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescAccountSummary2ResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MnsForceMigrating'])) {
            $model->mnsForceMigrating = $map['MnsForceMigrating'];
        }
        if (isset($map['MnsBag'])) {
            $model->mnsBag = $map['MnsBag'];
        }
        if (isset($map['MnsMigrating'])) {
            $model->mnsMigrating = $map['MnsMigrating'];
        }

        return $model;
    }
}
