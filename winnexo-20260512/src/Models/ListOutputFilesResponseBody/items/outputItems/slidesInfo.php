<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\ListOutputFilesResponseBody\items\outputItems;

use AlibabaCloud\Dara\Model;

class slidesInfo extends Model
{
    /**
     * @var int
     */
    public $completedSlides;

    /**
     * @var string
     */
    public $pptId;

    /**
     * @var string
     */
    public $pptName;

    /**
     * @var int
     */
    public $totalSlides;
    protected $_name = [
        'completedSlides' => 'completedSlides',
        'pptId' => 'pptId',
        'pptName' => 'pptName',
        'totalSlides' => 'totalSlides',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->completedSlides) {
            $res['completedSlides'] = $this->completedSlides;
        }

        if (null !== $this->pptId) {
            $res['pptId'] = $this->pptId;
        }

        if (null !== $this->pptName) {
            $res['pptName'] = $this->pptName;
        }

        if (null !== $this->totalSlides) {
            $res['totalSlides'] = $this->totalSlides;
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
        if (isset($map['completedSlides'])) {
            $model->completedSlides = $map['completedSlides'];
        }

        if (isset($map['pptId'])) {
            $model->pptId = $map['pptId'];
        }

        if (isset($map['pptName'])) {
            $model->pptName = $map['pptName'];
        }

        if (isset($map['totalSlides'])) {
            $model->totalSlides = $map['totalSlides'];
        }

        return $model;
    }
}
