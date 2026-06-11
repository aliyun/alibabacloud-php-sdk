<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListRayJobResponseBody\rayJobs;

class ListRayJobResponseBody extends Model
{
    /**
     * @var rayJobs[]
     */
    public $rayJobs;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'rayJobs' => 'rayJobs',
        'requestId' => 'requestId',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
        if (\is_array($this->rayJobs)) {
            Model::validateArray($this->rayJobs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rayJobs) {
            if (\is_array($this->rayJobs)) {
                $res['rayJobs'] = [];
                $n1 = 0;
                foreach ($this->rayJobs as $item1) {
                    $res['rayJobs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
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
        if (isset($map['rayJobs'])) {
            if (!empty($map['rayJobs'])) {
                $model->rayJobs = [];
                $n1 = 0;
                foreach ($map['rayJobs'] as $item1) {
                    $model->rayJobs[$n1] = rayJobs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
