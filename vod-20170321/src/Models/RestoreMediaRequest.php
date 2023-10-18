<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class RestoreMediaRequest extends Model
{
    /**
     * @description The ID of the media asset. You can specify a maximum of 20 IDs. Separate multiple IDs with commas (,). You can use one of the following methods to obtain the ID of the media asset.
     *
     *   Log on to the ApsaraVideo VOD console. In the left-side navigation pane, choose Media Files > Audio/Video. On the Video and Audio page, view the ID of the media asset. This method is applicable to files that are uploaded by using the ApsaraVideo VOD console.
     *   Obtain the value of VideoId from the response to the CreateUploadVideo operation that you call to upload media assets.
     *   Obtain the value of VideoId from the response to the SearchMedia operation that you call to query the media ID after the media asset is uploaded.
     *
     * @example 8bc8e94fe4e55abde85718****,eb186180e989dd56****
     *
     * @var string
     */
    public $mediaIds;

    /**
     * @description The number of days during which media assets remain in the restored state. Default value: 1. The maximum validity period of a restored Archive media asset is 7 days and the maximum validity period of a restored Cold Archive media asset is 365 days.
     *
     * @example 2
     *
     * @var string
     */
    public $restoreDays;

    /**
     * @description The restoration priority. This parameter is required only when you restore a Cold Archive media file. Valid values:
     *
     *   **Expedited**: The file is restored within 1 hour.
     *   **Standard**: The file is restored within 2 to 5 hours.
     *   **Bulk**: The file is restored within 5 to 12 hours.
     *
     * @example Standard
     *
     * @var string
     */
    public $restoreTier;

    /**
     * @description The modification range. Valid values:
     *
     *   **All**: restores all resources, including the source files and transcoded streams.
     *   **SourceFile**: restores only the source files.
     *
     * @example All
     *
     * @var string
     */
    public $scope;
    protected $_name = [
        'mediaIds'    => 'MediaIds',
        'restoreDays' => 'RestoreDays',
        'restoreTier' => 'RestoreTier',
        'scope'       => 'Scope',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaIds) {
            $res['MediaIds'] = $this->mediaIds;
        }
        if (null !== $this->restoreDays) {
            $res['RestoreDays'] = $this->restoreDays;
        }
        if (null !== $this->restoreTier) {
            $res['RestoreTier'] = $this->restoreTier;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RestoreMediaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaIds'])) {
            $model->mediaIds = $map['MediaIds'];
        }
        if (isset($map['RestoreDays'])) {
            $model->restoreDays = $map['RestoreDays'];
        }
        if (isset($map['RestoreTier'])) {
            $model->restoreTier = $map['RestoreTier'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        return $model;
    }
}
