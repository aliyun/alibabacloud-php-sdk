<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaCensorJobListResponseBody\mediaCensorJobList\mediaCensorJob;

use AlibabaCloud\Tea\Model;

class descCensorResult extends Model
{
    /**
     * @description The label of the moderation result. Separate multiple labels with commas (,). Valid values:
     *
     *   **normal**: normal content.
     *   **spam**: spam.
     *   **ad**: ads.
     *   **abuse**: abuse content.
     *   **flood**: excessive junk content.
     *   **contraband**: prohibited content.
     *   **meaningless**: meaningless content.
     *
     * @example normal
     *
     * @var string
     */
    public $label;

    /**
     * @description The score. Valid values: 0 to 100.
     *
     * @example 100
     *
     * @var string
     */
    public $rate;

    /**
     * @description The moderation scenario. The value is **antispam**.
     *
     * @example antispam
     *
     * @var string
     */
    public $scene;

    /**
     * @description The recommended subsequent operation. Valid values:
     *
     *   **pass**: The content passes the moderation.
     *   **review**: The content needs to be manually reviewed.
     *   **block**: The content needs to be blocked.
     *
     * @example pass
     *
     * @var string
     */
    public $suggestion;
    protected $_name = [
        'label'      => 'Label',
        'rate'       => 'Rate',
        'scene'      => 'Scene',
        'suggestion' => 'Suggestion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->rate) {
            $res['Rate'] = $this->rate;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return descCensorResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Rate'])) {
            $model->rate = $map['Rate'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }

        return $model;
    }
}
