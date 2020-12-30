<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DownloadLayer4RulesResponseBody;

use AlibabaCloud\Tea\Model;

class downloadFileResult extends Model
{
    /**
     * @var string
     */
    public $downloadLink;
    protected $_name = [
        'downloadLink' => 'DownloadLink',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->downloadLink) {
            $res['DownloadLink'] = $this->downloadLink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return downloadFileResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DownloadLink'])) {
            $model->downloadLink = $map['DownloadLink'];
        }

        return $model;
    }
}
