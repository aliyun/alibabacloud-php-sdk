<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetFileResponseBody\data;

use AlibabaCloud\Tea\Model;

class resourceDownloadLink extends Model
{
    /**
     * @description The download URL of the resource.
     *
     * @example http://xx
     *
     * @var string
     */
    public $downloadLink;
    protected $_name = [
        'downloadLink' => 'downloadLink',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->downloadLink) {
            $res['downloadLink'] = $this->downloadLink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceDownloadLink
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['downloadLink'])) {
            $model->downloadLink = $map['downloadLink'];
        }

        return $model;
    }
}
