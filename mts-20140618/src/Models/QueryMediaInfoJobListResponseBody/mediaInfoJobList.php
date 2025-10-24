<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaInfoJobListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaInfoJobListResponseBody\mediaInfoJobList\mediaInfoJob;

class mediaInfoJobList extends Model
{
    /**
     * @var mediaInfoJob[]
     */
    public $mediaInfoJob;
    protected $_name = [
        'mediaInfoJob' => 'MediaInfoJob',
    ];

    public function validate()
    {
        if (\is_array($this->mediaInfoJob)) {
            Model::validateArray($this->mediaInfoJob);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaInfoJob) {
            if (\is_array($this->mediaInfoJob)) {
                $res['MediaInfoJob'] = [];
                $n1 = 0;
                foreach ($this->mediaInfoJob as $item1) {
                    $res['MediaInfoJob'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MediaInfoJob'])) {
            if (!empty($map['MediaInfoJob'])) {
                $model->mediaInfoJob = [];
                $n1 = 0;
                foreach ($map['MediaInfoJob'] as $item1) {
                    $model->mediaInfoJob[$n1] = mediaInfoJob::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
