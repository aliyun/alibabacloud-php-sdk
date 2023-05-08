<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckSummaryResponseBody\summarys;
use AlibabaCloud\Tea\Model;

class GetCheckSummaryResponseBody extends Model
{
    /**
     * @example 843E4805-****-7EE12FA8DBFD
     *
     * @var string
     */
    public $requestId;

    /**
     * @var summarys[]
     */
    public $summarys;
    protected $_name = [
        'requestId' => 'RequestId',
        'summarys'  => 'Summarys',
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
        if (null !== $this->summarys) {
            $res['Summarys'] = [];
            if (null !== $this->summarys && \is_array($this->summarys)) {
                $n = 0;
                foreach ($this->summarys as $item) {
                    $res['Summarys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCheckSummaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Summarys'])) {
            if (!empty($map['Summarys'])) {
                $model->summarys = [];
                $n               = 0;
                foreach ($map['Summarys'] as $item) {
                    $model->summarys[$n++] = null !== $item ? summarys::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
