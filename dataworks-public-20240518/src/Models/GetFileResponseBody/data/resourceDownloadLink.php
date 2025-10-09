<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetFileResponseBody\data;

use AlibabaCloud\Dara\Model;

class resourceDownloadLink extends Model
{
    /**
     * @var string
     */
    public $downloadLink;
    protected $_name = [
        'downloadLink' => 'downloadLink',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->downloadLink) {
            $res['downloadLink'] = $this->downloadLink;
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
        if (isset($map['downloadLink'])) {
            $model->downloadLink = $map['downloadLink'];
        }

        return $model;
    }
}
