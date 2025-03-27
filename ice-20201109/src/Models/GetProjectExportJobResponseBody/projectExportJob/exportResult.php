<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetProjectExportJobResponseBody\projectExportJob;

use AlibabaCloud\Dara\Model;

class exportResult extends Model
{
    /**
     * @var string
     */
    public $timeline;
    protected $_name = [
        'timeline' => 'Timeline',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->timeline) {
            $res['Timeline'] = $this->timeline;
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
        if (isset($map['Timeline'])) {
            $model->timeline = $map['Timeline'];
        }

        return $model;
    }
}
