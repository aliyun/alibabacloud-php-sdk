<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponseBody\mediaAuditJob\data\videoResult\adResult;

use AlibabaCloud\Tea\Model;

class counterList extends Model
{
    /**
     * @description The number of video snapshots.
     *
     * @example 10
     *
     * @var int
     */
    public $count;

    /**
     * @description The categories of the ad review results. Valid values:
     *
     *   **normal**: normal content
     *   **ad**: other ads
     *   **politics**: political content
     *   **porn**: pornographic content
     *   **abuse**: abuse
     *   **terrorism**: terrorist content
     *   **contraband**: prohibited content
     *   **spam**: spam content
     *   **npx**: illegal ad
     *   **qrcode**: QR code
     *   **programCode**: mini program code
     *
     * @example ad
     *
     * @var string
     */
    public $label;
    protected $_name = [
        'count' => 'Count',
        'label' => 'Label',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return counterList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        return $model;
    }
}
