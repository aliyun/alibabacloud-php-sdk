<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\SubmitPreprocessJobsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitPreprocessJobsResponseBody\preprocessJobs\preprocessJob;

class preprocessJobs extends Model
{
    /**
     * @var preprocessJob[]
     */
    public $preprocessJob;
    protected $_name = [
        'preprocessJob' => 'PreprocessJob',
    ];

    public function validate()
    {
        if (\is_array($this->preprocessJob)) {
            Model::validateArray($this->preprocessJob);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->preprocessJob) {
            if (\is_array($this->preprocessJob)) {
                $res['PreprocessJob'] = [];
                $n1 = 0;
                foreach ($this->preprocessJob as $item1) {
                    $res['PreprocessJob'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PreprocessJob'])) {
            if (!empty($map['PreprocessJob'])) {
                $model->preprocessJob = [];
                $n1 = 0;
                foreach ($map['PreprocessJob'] as $item1) {
                    $model->preprocessJob[$n1] = preprocessJob::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
