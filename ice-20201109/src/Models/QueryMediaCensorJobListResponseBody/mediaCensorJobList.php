<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaCensorJobListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaCensorJobListResponseBody\mediaCensorJobList\mediaCensorJob;

class mediaCensorJobList extends Model
{
    /**
     * @var mediaCensorJob[]
     */
    public $mediaCensorJob;
    protected $_name = [
        'mediaCensorJob' => 'MediaCensorJob',
    ];

    public function validate()
    {
        if (\is_array($this->mediaCensorJob)) {
            Model::validateArray($this->mediaCensorJob);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaCensorJob) {
            if (\is_array($this->mediaCensorJob)) {
                $res['MediaCensorJob'] = [];
                $n1                    = 0;
                foreach ($this->mediaCensorJob as $item1) {
                    $res['MediaCensorJob'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MediaCensorJob'])) {
            if (!empty($map['MediaCensorJob'])) {
                $model->mediaCensorJob = [];
                $n1                    = 0;
                foreach ($map['MediaCensorJob'] as $item1) {
                    $model->mediaCensorJob[$n1++] = mediaCensorJob::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
