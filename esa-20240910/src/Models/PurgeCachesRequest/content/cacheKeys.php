<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\PurgeCachesRequest\content;

use AlibabaCloud\Tea\Model;

class cacheKeys extends Model
{
    /**
     * @description When refreshing, specify the header information corresponding to the cache key. When the custom cache key feature switch is enabled, the cache key will be generated based on the specified header for refreshing.
     *
     **UserGeo: Country/Region**
     * - Country/region codes follow the ISO 3166-2 standard.
     *
     **UserDeviceType: Device Type, currently there are three enum values**
     * - desktop
     * - tablet
     * - mobile
     *
     **UserLanguage: Language**
     * - Language codes follow the ISO 639-1 or BCP47 standards. For example, input \\"zh\\" to refresh content in Chinese.
     *
     * @var string[]
     */
    public $headers;

    /**
     * @description URL address to be refreshed.
     *
     * @example http://a.com/1.jpg?b=1
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'headers' => 'Headers',
        'url' => 'Url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->headers) {
            $res['Headers'] = $this->headers;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cacheKeys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Headers'])) {
            $model->headers = $map['Headers'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
