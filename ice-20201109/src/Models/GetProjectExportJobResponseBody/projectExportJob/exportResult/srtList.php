<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetProjectExportJobResponseBody\projectExportJob\exportResult;

use AlibabaCloud\Dara\Model;

class srtList extends Model
{
    /**
     * @var string
     */
    public $srtUrl;

    /**
     * @var string
     */
    public $tag;
    protected $_name = [
        'srtUrl' => 'SrtUrl',
        'tag' => 'Tag',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->srtUrl) {
            $res['SrtUrl'] = $this->srtUrl;
        }

        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
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
        if (isset($map['SrtUrl'])) {
            $model->srtUrl = $map['SrtUrl'];
        }

        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
