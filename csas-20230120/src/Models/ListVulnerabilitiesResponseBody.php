<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListVulnerabilitiesResponseBody\vulnerabilities;

class ListVulnerabilitiesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalNum;

    /**
     * @var vulnerabilities[]
     */
    public $vulnerabilities;
    protected $_name = [
        'requestId' => 'RequestId',
        'totalNum' => 'TotalNum',
        'vulnerabilities' => 'Vulnerabilities',
    ];

    public function validate()
    {
        if (\is_array($this->vulnerabilities)) {
            Model::validateArray($this->vulnerabilities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }

        if (null !== $this->vulnerabilities) {
            if (\is_array($this->vulnerabilities)) {
                $res['Vulnerabilities'] = [];
                $n1 = 0;
                foreach ($this->vulnerabilities as $item1) {
                    $res['Vulnerabilities'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }

        if (isset($map['Vulnerabilities'])) {
            if (!empty($map['Vulnerabilities'])) {
                $model->vulnerabilities = [];
                $n1 = 0;
                foreach ($map['Vulnerabilities'] as $item1) {
                    $model->vulnerabilities[$n1] = vulnerabilities::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
